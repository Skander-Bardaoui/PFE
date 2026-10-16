
import pandas as pd

Tresorier = pd.read_excel('Tresorier.xlsx')

# Initialisation du nouveau tableau "mouvement"
Mouvement = []
EntreClient = []


# Boucle pour extraire les mouvements
for index, row in Tresorier.iterrows():
    if row["Action"] == "Entree Client":
       EntreClient.append(row)

# Créer un nouveau DataFrame pour les mouvements
df_EntreClient = pd.DataFrame(EntreClient)

# Affichage du nouveau DataFrame


from sqlalchemy import create_engine
# PostgreSQL connection parameters
db_params = {
    'host': 'localhost',
    'database': 'EntreClient',
    'user': 'postgres',
    'password': '123',
    
}

# Create a SQLAlchemy engine
engine = create_engine(f'postgresql://{db_params["user"]}:{db_params["password"]}@{db_params["host"]}/{db_params["database"]}')

# Specify the table name
table_name = 'tresorerier'

# Load the DataFrame into PostgreSQL
df_EntreClient.to_sql(table_name, engine, if_exists='replace', index=False)

# Close the engine
engine.dispose()
print("connected successfully")

# Display the updated DataFrame

print(df_EntreClient)