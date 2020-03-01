import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import ProductList from './ProductsList'
import ProductForm from './ProductForm'
import URL from '../url'
export default class Example extends Component {

    constructor(props){
      super(props)
      this.state = {
        products:[],
        error : null,
        form : {
          codproduct: '',
          name: '',
          description: ''
        }
      }
      this.handleChange = this.handleChange.bind(this)
      this.handleSubmit = this.handleSubmit.bind(this)
    }

    handleChange(e){
      console.log(e.target.value)
      this.setState({
        form:{
          ...this.state.form, /* mantiene el valor original de la variable */
          [e.target.name]: e.target.value
        }
      })
    }

    async handleSubmit(e){
      e.preventDefault()
      //console.log('Sending...')
      try {
        let config = {
          method:'POST',
          headers : {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(this.state.form)
        }
        let res = await fetch(`${URL.apiUrl}/product`,config)
        let data = await res.json()
        this.setState({
          products:this.state.products.concat(data)
        })
      } catch (error) {
        this.setState({
          error
        })
      }
    }

    async componentDidMount(){
      try {
        let res = await fetch(`${URL.apiUrl}/products`)
        let data = await res.json()
        this.setState({
          products: data.products
        })
      } catch (error) {
        this.setState({
          error
        })
      }
    }

    render(){
      return(
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-lg-12">
                    <div className="card">
                        <div className="card-header">Example Component</div>

                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
            </div>
            <div className="row justify-content-center">
              <div className="col-md-12">
                <ProductForm
                  form={this.state.form}
                  onChange={this.handleChange}
                  onSubmit={this.handleSubmit}
                />
                <ProductList
                  products={ this.state.products }
                />
              </div>
            </div>
        </div>
      )
    } 
}

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
