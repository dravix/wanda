from pydantic import BaseModel
from schemas import Producto

class Vendidos(BaseModel):
    producto: Producto
    cantidad: float
    tipo: int
    total: float 

class VentaBase(BaseModel):
    fecha: int
    subtotal: float
    total: float
    descuentos: float

class Venta(VentaBase):
    pass