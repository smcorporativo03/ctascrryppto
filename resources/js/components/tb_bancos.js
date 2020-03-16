import React, { Component } from 'react';
import MaterialTableGestDB from './MaterialTable'
import ReactDOM from 'react-dom';
import MOBJ from '../structure';

export default class TbBancos extends Component {
  constructor(props) {
    super(props);
  }
  render() {
    return (
      <MaterialTableGestDB 
        objentity={MOBJ.bancos}
      />
    )
  }
}
if (document.getElementById('tb_bancos')) {
  ReactDOM.render(<TbBancos />, document.getElementById('tb_bancos'));
}