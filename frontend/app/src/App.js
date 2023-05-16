import './App.css';

import { useEffect, useState } from 'react';
import Producto from './components/viewProducto';

function App() {
  const [producto, setProducto] = useState({})
  const [query, setQuery] = useState("")
  const [amount, setAmount] = useState(1)

  const handleSubmit = (event)=> {
    const API = `http://localhost:8000/api/productos/${ query }`
    try {
      fetch(API)
      .then((response) => {
        if (response.status == 200){
          setQuery("")
          return response.json();
        }
        else{
          return {descripcion:"Producto no encontrado"}
        }
        
      })
      .then((resuts) => {
        setProducto(resuts)
      }
      );   
    } catch (error) {
      console.log(error)
    }
    event.preventDefault()
  }

  const handleChange = (event) =>{
    setQuery(event.target.value)

  }
  
  const handleAddition = (event) =>{

      event.preventDefault()
  }
  // useEffect(() => {
  //   const API = `http://127.0.0.1:8000/api/productos/${ query }`
  //   fetch(API)
  //   .then((response) => response.json())
  //   .then((resuts) => {
  //     console.log(resuts)
  //     setResults(resuts)
  //   }
  //   );

  // })

  return (
    <div className="App container">
      <nav>
        <img src="/pyventa2x.png" alt="Pyventa" className='logo'/>
      </nav>
      <article>
        <header>
        <form onSubmit={handleSubmit}>
          <input type='search' value={query} onChange={handleChange} placeholder='Referencia | Codigo de barras' name="search"/>
        </form>
        </header>
          <Producto data={producto} />
          <footer>
            <form className='grid' onSubmit={handleAddition}>
              <input className='text-right' type='number' value={amount}/>
              <button className='secondary'>Agregar</button>
              </form>
          </footer>
      </article>
    </div>
  );
}

export default App;
