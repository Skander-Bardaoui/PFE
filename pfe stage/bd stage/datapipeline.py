
import pandas as pd

Tresorier = pd.read_excel('Tresorier.xlsx')

# Initialisation du nouveau tableau "mouvement"
Mouvement = []
EntreClient = []


# Boucle pour extraire les mouvements
for index, row in Tresorier.iterrows():
    if row["Action"] == "Mouvement":
        Mouvement.append(row)

# Créer un nouveau DataFrame pour les mouvements
df_mouvement = pd.DataFrame(Mouvement)

# Affichage du nouveau DataFrame


from sqlalchemy import create_engine
# PostgreSQL connection parameters
db_params = {
    'host': 'localhost',
    'database': 'Tresorier',
    'user': 'postgres',
    'password': '123',
    
}

# Create a SQLAlchemy engine
engine = create_engine(f'postgresql://{db_params["user"]}:{db_params["password"]}@{db_params["host"]}/{db_params["database"]}')

# Specify the table name
table_name = 'tresorerier'

# Load the DataFrame into PostgreSQL
df_mouvement.to_sql(table_name, engine, if_exists='replace', index=False)

# Close the engine
engine.dispose()
print("connected successfully")

# Display the updated DataFrame

print(df_mouvement)