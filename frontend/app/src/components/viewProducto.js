export default function Producto({data:{ref,descripcion,precio,codigo,costo}}){
    let USDollar = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD',
    });
    
    return (
        <article>
            <h3>{descripcion || ""}</h3>
            <h1>{ precio && USDollar.format(precio)}</h1>
        </article>
    )

}