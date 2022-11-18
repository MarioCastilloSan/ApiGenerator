import React from 'react';

import Button from 'react-bootstrap/Button';
import Container from 'react-bootstrap/Container';
import Form from 'react-bootstrap/Form';
import Nav from 'react-bootstrap/Nav';
import Navbar from 'react-bootstrap/Navbar';
import NavDropdown from 'react-bootstrap/NavDropdown';


async function getData(nameData, token, tokenType) {
  return fetch(`http://127.0.0.1:8000/api/v1/${nameData}/`,
    {
      method: 'GET',
      headers: {
        Accept: 'application/json',
        'Content-Type': 'application/json',
        'Authorization': tokenType + " " + token,
      },
    })
    .then(data => data.json())
}

export default function NavbarMain({ getToken }) {


  const token = getToken.access_token;
  const token_type = getToken.token_type;


  const handleSubmit = async e => {
    e.preventDefault();
    // destroy the token
    sessionStorage.removeItem('token-API');
    window.location.reload();
  };

  const [dataTabla, setData] = React.useState(null);

  React.useEffect(() => {
    getData('tables', token, token_type).then(data => setData(data));
  }, []);


  const [dataVista, setVista] = React.useState(null);

  React.useEffect(() => {
    getData('views', token, token_type).then(data => setVista(data));
  }, []);


  const [dataProcedimiento, setProcedimiento] = React.useState(null);

  React.useEffect(() => {
    getData('routines', token, token_type).then(data => setProcedimiento(data));
  }, []);






  return (
    <Navbar bg="light" expand="lg" className="navbar1">
      <Container fluid>
        <Navbar.Brand href="#">Modulo API-Generator</Navbar.Brand>
        <Navbar.Toggle aria-controls="navbarScroll" />
        <Navbar.Collapse id="navbarScroll">
          <Nav
            className="me-auto my-2 my-lg-0"
            style={{ maxHeight: '100px' }}
            navbarScroll
          >







            <NavDropdown title="Tablas" id="navbarScrollingDropdown">
              <Form className="w-1000">
                <div key={`default-checkbox`} className="mb-3">
                  {
                    dataTabla && Object.keys(dataTabla.data).map((key, index) => {
                      return (
                        <Form.Check
                          key={index}
                          type='checkbox'
                          id={dataTabla.data[key].TABLE_NAME}
                          label={dataTabla.data[key].TABLE_NAME}
                        />
                      )
                    })

                  }
                </div>
              </Form>
            </NavDropdown>


            <NavDropdown title="Vistas" id="navbarScrollingDropdown">
              <Form className="w-1000">
                <div key={`default-checkbox`} className="mb-3">
                  {
                    dataVista && Object.keys(dataVista.data).map((key, index) => {
                      return (
                        <Form.Check
                          key={index}
                          type='checkbox'
                          id={dataVista.data[key].TABLE_NAME}
                          label={dataVista.data[key].TABLE_NAME}
                        />
                      )
                    })

                  }
                </div>
              </Form>
            </NavDropdown>


            <NavDropdown title="Procedimientos Almacenados" id="navbarScrollingDropdown">
              <Form  className="w-1000">
                <div key={`default-checkbox`} className="mb-3">
                  {
                    dataProcedimiento && Object.keys(dataProcedimiento.data).map((key, index) => {
                      return (
                        <Form.Check
                          key={index}
                          type='checkbox'
                          id={dataProcedimiento.data[key].ROUTINE_NAME}
                          label={dataProcedimiento.data[key].ROUTINE_NAME}
                        />
                      )
                    })

                  }
                </div>
              </Form>
            </NavDropdown>

          </Nav>
          <Form onSubmit={handleSubmit} className="d-flex">
            <Button type="submit" variant="outline-danger">Log Out</Button>
          </Form>
        </Navbar.Collapse>
      </Container>
    </Navbar>
  );
}