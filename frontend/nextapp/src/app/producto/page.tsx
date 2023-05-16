"use client";
import Producto from "./component"
import { useEffect, useState } from "react"
import { useRouter } from 'next/router';

// import { useSearchParams } from 'react-router-dom'


export  function Page1(){

    const [producto,setProducto] = useState({ref:0,descripcion:"",codigo:0,precio:0,costo:0})
    const router = useRouter()
    const {ref} = {ref:345}
    console.log(router)
    // const [searchParams, setSearchParams] = useSearchParams( );
    // const ref = searchParams.get("ref")
    useEffect(()=>{

        const API = `http://127.0.0.1:8000/api/productos/${ ref }` 
        fetch(API)
        .then((response) => response.json())
        .then((product) => {
            setProducto(product);
            console.log(product)
        });
    }, [])

    return <div>
        <Producto />
    </div>
}

 
export default function Page() {
  const router = useRouter();
  return <p>Post: {router.query.slug}</p>;
}