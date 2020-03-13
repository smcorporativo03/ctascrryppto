import React, { Component } from 'react'
import ReactDOM from 'react-dom'
import MaterialTable from 'material-table'
import URL from '../url'

export default class App extends Component {
  constructor(props) {
    super(props);
    this.state = {
      columns: [
        {title:'Id', field:'id',editable:'never'},
        {title:'Descripción', field:'descripcion'},
        {title:'Abreviatura', field:'abreviatura'},
        {title:'Estado', field:'estado'}/*
        { title: 'Name', field: 'name', editable: 'onUpdate' },
        { title: 'Surname', field: 'surname', editable: 'never' },
        { title: 'Birth Year', field: 'birthYear', type: 'numeric' },
        {
          title: 'Birth Place',
          field: 'birthCity',
          lookup: { 34: 'İstanbul', 63: 'Şanlıurfa' },
        },
      */],
      data: [/*
        { name: 'Mehmet', surname: 'Baran', birthYear: 1987, birthCity: 63 },
        { name: 'Zerya Betül', surname: 'Baran', birthYear: 2017, birthCity: 34 },
      */]
    }
  }

  async componentDidMount(){
    try {
      let res = await fetch(`${URL.apiUrl}/bancos`,{mode: 'no-cors'})
      let data = await res.json()
      console.log(data)
      this.setState({
        data:data.bancos
      })
    } catch (error) {
      this.setState({
        error
      })
    }
  }

  render() {
    return (
      <MaterialTable
        title="Bancos"
        columns={this.state.columns}
        data={this.state.data}
        editable={{
          onRowAdd: newData =>
            new Promise((resolve, reject) => {
              setTimeout(() => {
                {
                  const data = this.state.data;
                  let config = {
                    method:'POST',
                    headers : {
                      'Accept': 'application/json',
                      'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(newData)
                  }
                  let res = fetch(`${URL.apiUrl}/banco`,config);
                  data.push(res.json);
                  this.setState({ data }, () => resolve());
                }
                resolve()
              }, 1000)
            }),
          onRowUpdate: (newData, oldData) =>
            new Promise((resolve, reject) => {
              setTimeout(() => {
                {
                  const data = this.state.data;
                  const index = data.indexOf(oldData);
                  data[index] = newData;
                  this.setState({ data }, () => resolve());
                }
                resolve()
              }, 1000)
            }),
          onRowDelete: oldData =>
            new Promise((resolve, reject) => {
              setTimeout(() => {
                {
                  let data = this.state.data;
                  const index = data.indexOf(oldData);
                  data.splice(index, 1);
                  this.setState({ data }, () => resolve());
                }
                resolve()
              }, 1000)
            }),
        }}
      />
    )
  }
}

if (document.getElementById('react-material-table')) {
  ReactDOM.render(<App />, document.getElementById('react-material-table'));
}
