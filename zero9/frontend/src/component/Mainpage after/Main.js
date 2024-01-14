import React from 'react'
import data from "./data";
import './main.css'

const Main = () => {
  return (
  <>
  <div className="addpro">
                    <div className="addprocontainer">
                        {
                            data.items.map((item, index) => {
                                return (
                                    <div className="addpro1" key = {index}>
                                        <div className="addpro2">
                                            <span className="addtime">{item.title}</span>
                                            &nbsp;
                                            <span className="addvalue">{item.image}</span>
                                        </div>
                                        
                                    </div>
                                )
                            })
                        }
                    </div>
                </div>
  </>
  )
}

export default Main
