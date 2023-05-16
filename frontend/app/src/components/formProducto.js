export default function Producto({data:{ref,descripcion,precio,codigo,costo}}){
    return (
        <article>
            <header> Detalles del Producto </header>
            <label htmlFor="ref">Referencia</label>
            <input className="" value={ref} type="text" name="ref"/>

            <label htmlFor="descripcion">Descripcion</label>
            <input className="" value={descripcion} type="text" name="descripcion"/>

            <label htmlFor="codigo">Codigo</label>
            <input className="" value={codigo} type="text" name="codigo"/>

            <label htmlFor="precio">Precio</label>
            <input className="" value={precio} type="text" name="precio"/>

            <label htmlFor="costo">Costo</label>
            <input className="" value={costo} type="text" name="costo"/>
        </article>
    )

}