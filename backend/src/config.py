import secrets
from typing import Any, Dict, List, Optional, Union

from pydantic import AnyHttpUrl, BaseSettings, validator, AnyUrl


class Settings(BaseSettings):
    API_PREFIX: str = "/api"
    SECRET_KEY: str = secrets.token_urlsafe(32)
    # 60 minutes * 24 hours * 8 days = 8 days
    ACCESS_TOKEN_EXPIRE_MINUTES: int = 60 * 24 * 8
    SERVER_NAME: str
    SERVER_HOST: AnyHttpUrl
    # BACKEND_CORS_ORIGINS is a JSON-formatted list of origins
    # e.g: '["http://localhost", "http://localhost:4200", "http://localhost:3000", \
    # "http://localhost:8080"]'
    BACKEND_CORS_ORIGINS: List[AnyHttpUrl] = ["http://localhost:3000", "http://localhost:8080"]

    @validator("BACKEND_CORS_ORIGINS", pre=True)
    def assemble_cors_origins(cls, v: Union[str, List[str]]) -> Union[List[str], str]:
        if isinstance(v, str) and not v.startswith("["):
            return [i.strip() for i in v.split(",")]
        elif isinstance(v, (list, str)):
            return v
        raise ValueError(v)

    PROJECT_NAME: str 
    DB_SERVER: str
    DB_PORT: str
    DB_USER: str
    DB_PASSWORD: str
    DB_INSTANCE: str
    SQLALCHEMY_DATABASE_URI: Optional[AnyUrl] = None

    @validator("SQLALCHEMY_DATABASE_URI", pre=True)
    def assemble_db_connection(cls, v: Optional[str], values: Dict[str, Any]) -> Any:
        if isinstance(v, str):
            return v
        return AnyUrl.build(
            scheme="mysql",
            user=values.get("DB_USER"),
            password=values.get("DB_PASSWORD"),
            host=values.get("DB_SERVER"),
            port=values.get("DB_PORT"),
            path=f"/{values.get('DB_INSTANCE') or ''}",
         )

    class Config:
        case_sensitive = True
        env_file = "../.env"


settings = Settings()
