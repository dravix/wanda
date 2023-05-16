"""Create tiendas table

Revision ID: 41c923745779
Revises: 
Create Date: 2023-05-01 11:22:18.234814

"""
from alembic import op
import sqlalchemy as sa


# revision identifiers, used by Alembic.
revision = '41c923745779'
down_revision = None
branch_labels = None
depends_on = None


def upgrade() -> None:
    op.create_table(
        'tiendas',
        sa.Column('id', sa.Integer, primary_key=True),
        sa.Column('nombre', sa.String(50), nullable=False),
        sa.Column('ubicacion', sa.Unicode(200)),
        sa.Column('telefono', sa.String(15)),
    )


def downgrade() -> None:
    op.drop_table("tiendas")
