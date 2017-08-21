import csv,sys,os,ast

#Definir la ruta del modulo "settings"
project_dir = "/Users/dev/Projects/beer1/beer1"

sys.path.append(project_dir)
os.environ['DJANGO_SETTINGS_MODULE'] = 'settings'

import django
django.setup()

from testscraping.models import WebScraping, WebScrapingArtesanal, WebScrapingPremium

lider_tra = csv.reader(open("/Users/dev/Projects/beer1/lider_tradicional.csv"),delimiter=',')
tottus_tra = csv.reader(open("/Users/dev/Projects/beer1/tottus_tradicional.csv"),delimiter=',')
jumbo_tra = csv.reader(open("/Users/dev/Projects/beer1/jumbo_clasicas.csv"),delimiter=',')
tottus_pack = csv.reader(open("/Users/dev/Projects/beer1/tottus_pack.csv"),delimiter=',')
jumbo_pack = csv.reader(open("/Users/dev/Projects/beer1/jumbo_pack.csv"),delimiter=',')

lider_artesanal = csv.reader(open("/Users/dev/Projects/beer1/lider_artesanal.csv"),delimiter=',')
tottus_artesanal = csv.reader(open("/Users/dev/Projects/beer1/tottus_artesanal.csv"),delimiter=',')
jumbo_artesanal = csv.reader(open("/Users/dev/Projects/beer1/jumbo_artesanal.csv"),delimiter=',')

lider_premium = csv.reader(open("/Users/dev/Projects/beer1/lider_premium.csv"),delimiter=',')
tottus_premium = csv.reader(open("/Users/dev/Projects/beer1/tottus_premium.csv"),delimiter=',')

#Cervezas Tradicionales
for row in lider_tra:
    if row[0] != 'marca':
        ws = WebScraping()
        ws.marca=row[0].lower().title()
        ws.desc=row[1]
        ws.cantidad=row[2].strip().replace('c/u', '')
        ws.precio=float(row[3].replace('$', '').strip().replace('.', ''))
        ws.imagen=row[4]
        ws.supermercado='Lider'
        ws.save()

for row in tottus_tra:
    if row[0] != 'marca':
        ws = WebScraping()
        ws.marca=row[0].lower().title()
        ws.desc=row[1]
        ws.precio=float(row[2].replace('$', '').strip().replace('.', ''))
        ws.imagen=row[3]
        ws.supermercado='Tottus'
        ws.save()

for row in jumbo_tra:
    if row[0] != 'marca':
        ws = WebScraping()
        ws.marca=row[0].lower().title()
        ws.desc=row[1]
        ws.precio=float(row[2].replace('$', '').strip().replace('.', ''))
        ws.imagen='https://s7d2.scene7.com/is/image/Tottus/20316912'
        ws.supermercado='Jumbo'
        ws.save()

for row in tottus_pack:
    if row[0] != 'marca':
        ws = WebScraping()
        ws.marca=row[0].lower().title()
        ws.desc=row[1]
        ws.precio=float(row[2].replace('$', '').strip().replace('.', ''))
        ws.imagen=row[3]
        ws.supermercado='Tottus'
        ws.save()

for row in jumbo_pack:
    if row[0] != 'marca':
        ws = WebScraping()
        ws.marca=row[0].lower().title()
        ws.desc=row[1]
        ws.precio=float(row[2].replace('$', '').strip().replace('.', ''))
        ws.imagen='https://s7d2.scene7.com/is/image/Tottus/20316912'
        ws.supermercado='Jumbo'
        ws.save()

#Cervezas Artesanales
for row in lider_artesanal:
    if row[0] != 'marca':
        ws = WebScrapingArtesanal()
        ws.marca=row[0].lower().title()
        ws.desc=row[1]
        ws.cantidad=row[2].strip().replace('c/u', '')
        ws.precio=float(row[3].replace('$', '').strip().replace('.', ''))
        ws.imagen=row[4]
        ws.supermercado='Lider'
        ws.save()

for row in tottus_artesanal:
    if row[0] != 'marca':
        ws = WebScrapingArtesanal()
        ws.marca=row[0].lower().title()
        ws.desc=row[1]
        ws.precio=float(row[2].replace('$', '').strip().replace('.', ''))
        ws.imagen=row[3]
        ws.supermercado='Tottus'
        ws.save()

for row in jumbo_artesanal:
    if row[0] != 'marca':
        ws = WebScraping()
        ws.marca=row[0].lower().title()
        ws.desc=row[1]
        ws.precio=float(row[2].replace('$', '').strip().replace('.', ''))
        ws.imagen='https://s7d2.scene7.com/is/image/Tottus/20316912'
        ws.supermercado='Jumbo'
        ws.save()

#Cervezas Premium
for row in lider_premium:
    if row[0] != 'marca':
        ws = WebScrapingPremium()
        ws.marca=row[0].lower().title()
        ws.desc=row[1]
        ws.cantidad=row[2].strip().replace('c/u', '')
        ws.precio=float(row[3].replace('$', '').strip().replace('.', ''))
        ws.imagen=row[4]
        ws.supermercado='Lider'
        ws.save()

for row in tottus_premium:
    if row[0] != 'marca':
        ws = WebScrapingPremium()
        ws.marca=row[0].lower().title()
        ws.desc=row[1]
        ws.precio=row[2].replace('$', '').strip().replace('.', '')
        ws.imagen=row[3]
        ws.supermercado='Tottus'
        ws.save()
