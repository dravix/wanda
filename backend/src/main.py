from fastapi import Depends, FastAPI, HTTPException
from fastapi import APIRouter
from sqlalchemy.orm import Session
from endpoints import productos, ventas
from config import settings
from fastapi.middleware.cors import CORSMiddleware

#import schemas
#from database import engine

#schemas.Base.metadata.create_all(bind=engine)

app = FastAPI()

app.add_middleware(
    CORSMiddleware,
    allow_origins=settings.BACKEND_CORS_ORIGINS,
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)

@app.get("/")
def health_check():
    return {"status": "ok"}


api_router = APIRouter()
api_router.include_router(productos.router, prefix="/productos", tags=["productos"])
api_router.include_router(ventas.router, prefix="/ventas", tags=["ventas"])

app.include_router(api_router, prefix=settings.API_PREFIX)
