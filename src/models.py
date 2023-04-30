# coding: utf-8
from sqlalchemy import BigInteger, Column, Date, DateTime, Float, Integer, String, Text, text
from sqlalchemy.dialects.mysql import ENUM, INTEGER, TINYINT, VARCHAR
from sqlalchemy.ext.declarative import declarative_base

from database import Base

#Base = declarative_base()
metadata = Base.metadata


class Caja(Base):
    __tablename__ = 'cajas'

    num_caja = Column(Integer, primary_key=True)
    nombre = Column(VARCHAR(45), nullable=False)
    maquina = Column(VARCHAR(15))
    saldo_inicial = Column(Float, nullable=False)
    estado = Column(Date, nullable=False)
    efectivo = Column(Float, nullable=False)


class Cliente(Base):
    __tablename__ = 'clientes'

    id = Column(Integer, primary_key=True)
    nombre = Column(VARCHAR(150), nullable=False)
    rfc = Column(VARCHAR(15), nullable=False)
    direccion = Column(VARCHAR(100), nullable=False)
    poblacion = Column(VARCHAR(100), nullable=False)
    estado = Column(VARCHAR(100), nullable=False)
    tel = Column(VARCHAR(15), nullable=False)
    correo = Column(VARCHAR(50), nullable=False)
    tipo = Column(Integer, nullable=False)
    credito = Column(Float, nullable=False)


class Codigo(Base):
    __tablename__ = 'codigos'

    producto = Column(Integer, primary_key=True, nullable=False)
    codigo = Column(VARCHAR(20), primary_key=True, nullable=False)


class Comprado(Base):
    __tablename__ = 'comprados'

    compra = Column(Integer, primary_key=True, nullable=False)
    producto = Column(Integer, primary_key=True, nullable=False)
    cantidad = Column(Float, nullable=False)
    costo = Column(Float, nullable=False)
    total = Column(Float, nullable=False)


class Compra(Base):
    __tablename__ = 'compras'

    id = Column(Integer, primary_key=True)
    fecha = Column(DateTime, nullable=False)
    proveedor = Column(Integer, nullable=False)
    comprador = Column(Integer, nullable=False)
    total = Column(Float, nullable=False)


class Consulta(Base):
    __tablename__ = 'consultas'

    id_consulta = Column(Integer, primary_key=True)
    titulo = Column(String(100), nullable=False)
    descripcion = Column(Text, nullable=False)
    query = Column(Text, nullable=False)


class Departamento(Base):
    __tablename__ = 'departamentos'

    id = Column(Integer, primary_key=True)
    nombre = Column(VARCHAR(100), nullable=False)


class Existencia(Base):
    __tablename__ = 'existencia'

    producto = Column(Integer, primary_key=True, nullable=False)
    inventario = Column(Integer, primary_key=True, nullable=False)
    stock_fisico = Column(Float, nullable=False)
    stock_logico = Column(Float, nullable=False)
    inconsistencia = Column(Float)


class Faltante(Base):
    __tablename__ = 'faltantes'

    producto = Column(Integer, primary_key=True)
    usuario = Column(Integer, nullable=False)
    cantidad = Column(Float, nullable=False)
    prioridad = Column(Integer, nullable=False)
    fecha = Column(Date, nullable=False)


class Familia(Base):
    __tablename__ = 'familias'

    id = Column(Integer, primary_key=True)
    nombre = Column(String(100), nullable=False)
    departamento = Column(Integer, nullable=False)


class Gasto(Base):
    __tablename__ = 'gastos'

    num_gasto = Column(Integer, primary_key=True, nullable=False)
    usuario = Column(Integer, primary_key=True, nullable=False, index=True)
    caja = Column(Integer, primary_key=True, nullable=False, index=True)
    fecha = Column(DateTime, nullable=False)
    concepto = Column(VARCHAR(200), nullable=False)
    cantidad = Column(Float, nullable=False)


class Impuesto(Base):
    __tablename__ = 'impuestos'

    id = Column(Integer, primary_key=True)
    nombre = Column(VARCHAR(100), nullable=False)
    porcentaje = Column(Float, nullable=False)


class Inventario(Base):
    __tablename__ = 'inventarios'

    id_inventario = Column(Integer, primary_key=True)
    fecha = Column(DateTime, nullable=False)
    saldo = Column(Float, nullable=False)
    dominio = Column(VARCHAR(120))
    orden = Column(VARCHAR(20))
    estado = Column(TINYINT, nullable=False)
    auditor = Column(Integer, nullable=False)
    gerente = Column(Integer, nullable=False)


class Movimiento(Base):
    __tablename__ = 'movimientos'

    id_movimiento = Column(INTEGER, primary_key=True)
    usuario = Column(INTEGER, nullable=False)
    caja = Column(Integer, nullable=False)
    detalle = Column(VARCHAR(100))
    tipo = Column(ENUM('R', 'D', 'T'), nullable=False)
    monto = Column(Float, nullable=False)
    fecha = Column(DateTime, nullable=False)


class Nota(Base):
    __tablename__ = 'notas'

    id = Column(Integer, primary_key=True)
    cliente = Column(Integer, nullable=False, index=True)
    usuario = Column(Integer, nullable=False, index=True)
    caja = Column(Integer, nullable=False, index=True)
    total = Column(Float, nullable=False)
    fecha = Column(DateTime, nullable=False)
    tipo = Column(TINYINT, nullable=False, comment='0:Nota;1:Factura; 2: Devolucion')
    status = Column(TINYINT, nullable=False, comment='0:sin pagar; 1:pagado, 2:en credito, 3:devolucion')


class NotasCobrada(Base):
    __tablename__ = 'notas_cobradas'

    id = Column(Integer, primary_key=True)
    nota = Column(Integer, nullable=False, unique=True)


class Oferta(Base):
    __tablename__ = 'ofertas'

    promocion = Column(Integer, primary_key=True, nullable=False)
    conjunto = Column(Integer, primary_key=True, nullable=False)
    tipo = Column(Integer, primary_key=True, nullable=False)


class Producto(Base):
    __tablename__ = 'productos'

    codigo = Column(BigInteger, nullable=False, server_default=text("'0'"))
    ref = Column(Integer, primary_key=True)
    descripcion = Column(VARCHAR(100), nullable=False)
    familia = Column(Integer, server_default=text("'0'"))
    costo = Column(Float(asdecimal=True), nullable=False)
    ganancia = Column(Float(asdecimal=True), nullable=False)
    precio = Column(Float(asdecimal=True), nullable=False)
    stock = Column(Float, server_default=text("'0'"))
    unidad = Column(Integer, nullable=False)
    vendidas = Column(Float, nullable=False)
    impuesto = Column(Integer, nullable=False)
    ultima_modificacion = Column(DateTime, nullable=False)


class Promocione(Base):
    __tablename__ = 'promociones'

    id = Column(Integer, primary_key=True)
    nombre = Column(VARCHAR(50), nullable=False)
    descuento = Column(Float, nullable=False)
    inicio = Column(Date, nullable=False)
    fin = Column(Date, nullable=False)
    minimo = Column(Float, nullable=False)
    maximo = Column(Float, nullable=False)


class Subproducto(Base):
    __tablename__ = 'subproductos'

    subproducto = Column(Integer, primary_key=True, nullable=False)
    cantidad = Column(Float, nullable=False)
    producto = Column(Integer, primary_key=True, nullable=False, index=True)


class Unidade(Base):
    __tablename__ = 'unidades'

    id = Column(Integer, primary_key=True)
    nombre = Column(VARCHAR(20), nullable=False)


class Usuario(Base):
    __tablename__ = 'usuarios'

    id_usuario = Column(Integer, primary_key=True)
    nombre = Column(VARCHAR(50), nullable=False)
    usuario = Column(VARCHAR(50), nullable=False, unique=True)
    clave = Column(VARCHAR(50), nullable=False)
    nivel = Column(TINYINT, nullable=False)


class Vendido(Base):
    __tablename__ = 'vendidos'

    venta = Column(Integer, primary_key=True, nullable=False)
    producto = Column(Integer, primary_key=True, nullable=False, index=True)
    tipo = Column(TINYINT(1), primary_key=True, nullable=False)
    cantidad = Column(Float, nullable=False)
    total = Column(Float, nullable=False)


class Venta(Base):
    __tablename__ = 'ventas'

    fecha = Column(Date, primary_key=True)
    subtotal = Column(Float, nullable=False)
    descuentos = Column(Float, nullable=False)
    total = Column(Float, nullable=False)
    efectivo = Column(Float, nullable=False)
