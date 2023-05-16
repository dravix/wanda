
import './style.css'
import Link from 'next/link'

async function getData() {
    const limit = 15
    const res = await fetch('http://127.0.0.1:8000/api/productos/?limit='+limit);
    // The return value is *not* serialized
    // You can return Date, Map, Set, etc.
   
    // Recommendation: handle errors
    if (!res.ok) {
      // This will activate the closest `error.js` Error Boundary
      throw new Error('Failed to fetch data');
    }
   
    return res.json();
  }
   
  export default async function Page() {
    const data = await getData();
    
    return <main>

        <form>
            <input type="search" name="searchBox"/>
        </form>
        <table id="data">
            {data.map( d =>(
                <tr>
                    <td>{d.ref}</td>
                    <td>{d.descripcion}</td>
                    <td className='amount'>${d.precio}</td>
                    <td><Link href={{
                            pathname:"/producto",
                            query: {ref:d.ref}
                    }}>Editar</Link></td>
                </tr>
            ))}
        </table>
    </main>;
  }