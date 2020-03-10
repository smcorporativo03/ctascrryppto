import React, { Component } from 'react'
import ReactDOM from 'react-dom'
import MaterialTable from 'material-table'
import URL from '../url'

export default class App extends Component {
  constructor(props) {
    super(props);
    this.state = {
      bancos:[],
      columns: [
        { title: 'Name', field: 'name', editable: 'onUpdate' },
        { title: 'Surname', field: 'surname', editable: 'never' },
        { title: 'Birth Year', field: 'birthYear', type: 'numeric' },
        {
          title: 'Birth Place',
          field: 'birthCity',
          lookup: { 34: 'İstanbul', 63: 'Şanlıurfa' },
        },
      ],
      data: [
        { name: 'Mehmet', surname: 'Baran', birthYear: 1987, birthCity: 63 },
        { name: 'Zerya Betül', surname: 'Baran', birthYear: 2017, birthCity: 34 },
      ]
    }
  }

  async componentDidMount(){
    try {
      let res = await fetch(`${URL.apiUrl}/bancos`)
      let data = await res.json()
      this.setState({
        bancos: data.bancos
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
        title="Disable Field Editable Preview"
        columns={this.state.columns}
        data={this.state.data}
        editable={{
          onRowAdd: newData =>
            new Promise((resolve, reject) => {
              setTimeout(() => {
                {
                  const data = this.state.data;
                  data.push(newData);
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
