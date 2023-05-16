from typing import Any

from fastapi import APIRouter, Body, Depends, HTTPException
from sqlalchemy.orm import Session

from schemas import Venta
from cruds import ventas
from deps import get_db


router = APIRouter()


@router.get("/", response_model=list[Venta])
def read_ventas(
        skip: int = 0,
        limit: int = 100,
        db: Session = Depends(get_db)
):
    sales = ventas.get_latest_ventas(db, skip=skip, limit=limit)
    return sales


