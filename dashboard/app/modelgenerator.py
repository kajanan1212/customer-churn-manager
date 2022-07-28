import pandas as pd
from sklearn.ensemble import RandomForestClassifier
import joblib

def encode(dataframe):
    data = dataframe.copy()
    encoded_data = pd.get_dummies(data, columns=['location_code'])
    encoded_data['Churn'] = encoded_data['Churn'].map({'Yes': 1, 'No': 0})
    for col in ['intertiol_plan', 'voice_mail_plan']:
        encoded_data[col] = encoded_data[col].map({'yes': 1, 'no': 0})
    return encoded_data

def add_features(dataframe):
    data = dataframe.copy()
    data['total_min'] = data['total_day_min'] + data['total_eve_min'] + data['total_night_minutes'] + data['total_intl_minutes']
    return data

def generate_model():
    data_path = './data/train_data.csv'
    model_path = './model/model_rf.joblib'

    train = pd.read_csv(data_path, index_col=0)

    fadded_train = add_features(train)
    encoded_train = encode(fadded_train)

    X = encoded_train.drop(columns=['Churn'])
    y = encoded_train.Churn
    
    rf = RandomForestClassifier(random_state=42)
    rf.fit(X, y)
    
    joblib.dump(rf, model_path)