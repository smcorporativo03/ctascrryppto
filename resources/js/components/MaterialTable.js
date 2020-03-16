import React, { Component } from 'react';
import MaterialTable from 'material-table'
import URL from '../url'

export default class MaterialTableGestDB extends Component {
  /*
  {
    objentity={materialtable:{tblTitle:'',columnas[]},GET:{},POST:{}}
  }
  */
  constructor(props) {
    super(props);
    this.state={
      title:props.objentity.materialtable.tblTitle,
      data:[],
      columns:props.objentity.materialtable.columnas,
      get:props.objentity.GET,
      post:props.objentity.POST,
      error:null
    }
    this.handleSubmit = this.handleSubmit.bind(this)
  }

  async componentDidMount(){
    try {
      console.log(`${URL.apiUrl}${this.state.get.getAll}`)
      let res = await fetch(`${URL.apiUrl}${this.state.get.getAll}`)
      let data = await res.json()
      this.setState({
        data: data
      })
    } catch (error) {
      this.setState({
        error
      })
    }
  }

  async handleSubmit(newData){
    try {
      let config = {
        method:'POST',
        headers : {
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(newData)
      }
      let res = await fetch(`${URL.apiUrl}${this.state.post.addNew}`,config)
      let resdata = await res.json()
      this.setState({
        data:this.state.data.concat(resdata)
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
        title={this.state.title}
        columns={this.state.columns}
        data={this.state.data}
        editable={{
          onRowAdd: newData => new Promise((resolve,reject)=>{
            setTimeout(()=>{this.handleSubmit(newData)},1000)
            resolve()
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