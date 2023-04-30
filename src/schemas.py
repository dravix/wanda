from typing import Union

from pydantic import BaseModel
import datetime

class ProductoBase(BaseModel):
    codigo: int
    descripcion: Union[str, None] = None
    precio: float


class ProductoCreate(ProductoBase):
    pass

class Producto(ProductoBase):
    ref: int
    ultima_modificacion: Union[datetime.datetime,None] = None

    class Config:
        orm_mode = True