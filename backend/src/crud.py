from sqlalchemy.orm import Session

from models import Producto, Usuario
from schemas.producto import ProductoSearch


def get_producto(db: Session, ref: int):
    return db.query(Producto).filter(Producto.ref == ref).first()


def get_producto_by_codigo(db: Session, codigo: int):
    return db.query(Producto).filter(
                 Producto.codigo == codigo).first()


def get_productos(db: Session, skip: int = 0, limit: int = 15):
    return db.query(Producto).offset(skip).limit(limit).all()


def get_user(db: Session, user_id: int):
    return db.query(Usuario).filter(Usuario.usuario_id == user_id).first()


def find_producto(db: Session, producto: ProductoSearch):
    return db.query(Producto).filter(
        Producto.descripcion.contains(producto.descripcion)
    )

# def get_user_by_email(db: Session, email: str):
#     return db.query(models.User).filter(models.User.email == email).first()


# def get_users(db: Session, skip: int = 0, limit: int = 100):
#     return db.query(models.User).offset(skip).limit(limit).all()


# def create_user(db: Session, user: schemas.UserCreate):
#     fake_hashed_password = user.password + "notreallyhashed"
#     db_user = models.User(email=user.email, hashed_password=fake_hashed_password)
#     db.add(db_user)
#     db.commit()
#     db.refresh(db_user)
#     return db_user


# def get_items(db: Session, skip: int = 0, limit: int = 100):
#     return db.query(models.Item).offset(skip).limit(limit).all()


# def create_user_item(db: Session, item: schemas.ItemCreate, user_id: int):
#     db_item = models.Item(**item.dict(), owner_id=user_id)
#     db.add(db_item)
#     db.commit()
#     db.refresh(db_item)
#     return db_item