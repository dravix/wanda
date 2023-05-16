from typing import Union

from pydantic import BaseModel


class TiendaBase(BaseModel):
    id: int
    nombre: Union[str, None] = None
    ubicacion: str | None
    telefono: str | None


class TiendaCreate(TiendaBase):
    pass


class Tienda(TiendaBase):

    class Config:
        orm_mode = True


class TiendaSearch(BaseModel):
    nombre: str
