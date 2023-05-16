from pydantic import BaseModel


class UsuarioBase(BaseModel):
    nombre: str
    nivel: int
    usuario: str


class Usuario(UsuarioBase):
    usuario_id: int


class UsuarioCreate(UsuarioBase):
    clave: str
