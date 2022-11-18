import React  from 'react';
import './App.css';
import { BrowserRouter, Route, Routes  } from 'react-router-dom';


import Dashboard from './components/Dashboard/Dashboard';
import Navbar from './components/Navbar/NavbarMain';
import Login from './components/Login/Login';
import useToken from './components/App/useToken';

function App() {


  const { token, setToken } = useToken();

  if(!token) {
    console.log(token)
    return <Login setToken={setToken} />

  }


  return (
    <div className="wrapper">
      <Navbar getToken={token} />
      <BrowserRouter>
        <Routes >
          <Route index path="/" element={<Dashboard />} />
        </Routes>
      </BrowserRouter>
    </div>
  );
}

export default App;