import React, { Component } from 'react';
import MaterialTableGestDB from './MaterialTable'
import ReactDOM from 'react-dom';
import MOBJ from '../structure';

export default class TbLineas extends Component {
  constructor(props) {
    super(props);
  }
  render() {
    return (
      <MaterialTableGestDB 
        objentity={MOBJ.lineas}
      />
    )
  }
}
if (document.getElementById('tb_lineas')) {
  ReactDOM.render(<TbLineas />, document.getElementById('tb_lineas'));
}