from sqlalchemy.orm import Session
from models import Nota


def get_latest_ventas(db: Session, skip: int, limit: int = 15):
    return db.query(Nota).limit(limit).order_by(Nota.id).all()
