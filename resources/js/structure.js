const MOBJ={
  bancos:{
    GET:{
      getAll:'/bancos',
    },
    POST:{
      addNew:'/banco',
    },
    materialtable:{
      tblTitle:'Bancos',
      columnas:[
        {title:'Id', field:'id',editable:'never'},
        {title:'Descripción', field:'descripcion'},
        {title:'Abreviatura', field:'abreviatura'},
        {title:'Estado', field:'estado',editable:'never'}
      ]
    }
  },
  lineas:{
    GET:{
      getAll:'/lineas',
    },
    POST:{
      addNew:'/linea',
    },
    materialtable:{
      tblTitle:'Lineas',
      columnas:[
        {title:'Id', field:'id',editable:'never'},
        {title:'Descripción', field:'descripcion'},
        {title:'Abreviatura', field:'abreviatura'},
        {title:'Estado', field:'estado',editable:'never'}
      ]
    }
  }
};

export default MOBJ;