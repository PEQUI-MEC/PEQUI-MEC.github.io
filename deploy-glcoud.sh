gcloud builds submit --tag gcr.io/humanoid-210523/website-pequi

gcloud run deploy website-pequi\                               
          --project=humanoid-210523\
          --platform=managed\
          --region=us-central1\
          --image=gcr.io/humanoid-210523/website-pequi\
          --allow-unauthenticated