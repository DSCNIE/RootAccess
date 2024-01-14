import React, { useState, useEffect } from "react";
import { useNavigate } from "react-router-dom";
import "./allproducts.css";

const Allproduct = () => {
  const [product, setProduct] = useState([]);
  const navigate = useNavigate();

  useEffect(() => {
    getProduct();
  }, []);

  const getProduct = async () => {
    let result = await fetch("http://localhost:5000/getproducts");
    result = await result.json();
    console.log(result);
    setProduct(result);
  };
  console.warn("products", product);
  // return (
  //   <>
  //     <div className="inputboxse">
  //       <input type="text" placeholder="Search Here" />
  //     </div>
  //     <div className="viewprod">
  //       <div className="products">
  //         <div className="product-wrapper">
  // {product.map((item, index) => (
  //   <div key={item._id}>
  //     <div className="productlist">
  //       <div className="proimage">
  //         <img src={item.image} alt="imadasge" />
  //       </div>
  //       <div className="protitle">
  //         <h1>{item.name}</h1>
  //       </div>
  //       <div className="prodisc">
  //         <h1>{item.disp}</h1>
  //       </div>
  //       <div className="proloca">
  //         <h1>{item.location}</h1>
  //       </div>
  //       <div className="viewproduct">
  //         <button
  //           onClick={() => navigate(`/updatepro/${item._id}`)}
  //           className="buttons"
  //         >
  //           More Info
  //         </button>
  //       </div>
  //     </div>
  //   </div>
  // ))}
  //         </div>
  //       </div>
  //     </div>
  //   </>
  // );
  return (
    <>
      <div className="fle pad">
        {product.map((item, index) => (
          <div key={item._id} className="wid fle ">
            <div className="img">
              <img src={item.image } alt="" className="img" />
            </div>
            <div>
              <h1>{item.name}</h1>

              <p >{item.disp}</p>

              <h2 >{item.location}</h2>

              <button
                onClick={() => navigate(`/updatepro/${item._id}`)}
                className="buttons"
              >
                More Info
              </button>
            </div>
          </div>
        ))}
      </div>
    </>
  );
};

export default Allproduct;
