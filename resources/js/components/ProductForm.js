import React from 'react';

const ProductForm = ({form,onChange,onSubmit}) => (
  <form
    className="form-inline justify-content-center"
    onSubmit={onSubmit}
  >
    <div className="form-group mb-2">
      <input
        name="codproduct"
        className="form-control"
        placeholder="codproduct"
        type="text"
        value={form.codproduct}
        onChange={onChange}
      /> 
      <input
        name="name"
        className="form-control"
        placeholder="name"
        type="text"
        value={form.name}
        onChange={onChange}
      /> 
      <input
        name="description"
        className="form-control"
        placeholder="description"
        type="text"
        value={form.description}
        onChange={onChange}
      /> 
    </div> 
    <button
      type="submit"
      className="btn btn-primary mb-2"
    >Add</button>
  </form>
)

export default ProductForm;