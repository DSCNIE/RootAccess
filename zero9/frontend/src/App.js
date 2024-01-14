
import './App.css';
import Main from './component/mainpage/Main';
import Addpro from './component/add_product/Addpro';
//import Footer from './component/footer/Footer';
import Allproduct from './component/viewproductall/Allproduct';
//import Header from './component/header/Header';
import Login from './component/login/Login';
//import Registration from './component/registration/Registration';
import { Routes, Route } from 'react-router-dom';
import Registration from './component/registration/Registration';
import Privatecomponent from './component/Privatecomponent';
import Updatepro from './component/updatepro/Updatepro';
import Footer from './component/footer/Footer';
import Header from './component/header/Header';

function App() {
  return (
    <div>
    <Header/>
    <Routes>
      <Route element={<Privatecomponent/>}>
      <Route path="/" element={<Main />} />
    
      <Route path="/profile" element={<h1>profile</h1>} />
      <Route path='/logout' element={<h1>logout</h1>}/>
      <Route path='/addproduct' element={<Addpro/>}/>
      <Route path='/updatepro/:id' element={<Updatepro/>}/>
      <Route path='/allproduct' element={<Allproduct/>}/>
      </Route>  
      <Route path="/login" element={<Login />} />
      <Route path="/registration" element={<Registration />} />
    
    </Routes>



    </div>
  );
}

export default App;
