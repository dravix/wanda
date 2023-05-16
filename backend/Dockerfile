FROM tiangolo/uvicorn-gunicorn-fastapi:python3.11 as builder

WORKDIR /app/

COPY src .

RUN python -m pip install -r /app/requirements.txt



ENV PYTHONPATH=/app