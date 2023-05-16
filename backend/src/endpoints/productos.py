from typing import Any

from fastapi import APIRouter, Body, Depends, HTTPException
from fastapi.security import OAuth2PasswordRequestForm
from sqlalchemy.orm import Session

from schemas import producto
import crud
from deps import get_db


router = APIRouter()


@router.get("/", response_model=list[producto.Producto])
def read_productos(
        skip: int = 0,
        limit: int = 100,
        db: Session = Depends(get_db)
):
    productos = crud.get_productos(db, skip=skip, limit=limit)
    return productos


@router.get("/{ref}", response_model=producto.Producto)
def read_producto(ref: int, db: Session = Depends(get_db)):
    if ref < 10000000:
        producto = crud.get_producto(db, ref=ref)
    else: 
        producto = crud.get_producto_by_codigo(db, codigo=ref)
    if producto is None:
        raise HTTPException(status_code=404, detail="Producto no encontrado")
    return producto


@router.post("/search", response_model=list[producto.Producto])
def find_productos(producto: producto.ProductoSearch,  db: Session = Depends(get_db)):
    productos = crud.find_producto(db, producto=producto).all()
    return productos
