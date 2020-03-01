import React from 'react';

const ProductList = ({products}) => (
  <table className="table">
    <tbody>
      { products.map((product) => (
        <tr key={product.id}>
          <td>{product.codproduct}</td>
          <td>{product.name}</td>
          <td>{product.description}</td>
        </tr>
      ))}
    </tbody>
  </table>
)

export default ProductList;