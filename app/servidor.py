# -*- coding: utf-8 -*-
"""
Created on Tue Jun 15 13:48:17 2021

@author: SAMSUNG
"""

import http.server             
import socketserver
import zipfile
import os
import shutil
import sys



       
def carga(direccion):
    dire = os.getcwd()
    shutil.copy(direccion,dire)
    print("Entre")

    
def comprimido(filename):
    jungle_zip = zipfile.ZipFile(filename+'.zip', 'w')
    jungle_zip.write (filename , compress_type = zipfile.ZIP_DEFLATED)
    jungle_zip.close()
    print("Entre1")
   
def conexion():
    PORT = 8081                               
    Handler = http.server.SimpleHTTPRequestHandler
    print("Entre2")
    with socketserver.TCPServer(("", PORT), Handler) as httpd:
        print("Servidor en el puerto 8080")
        httpd.serve_forever()
        
def app(direccion,filename):
    carga(direccion)
    comprimido(filename)
    print("Entre4")
    conexion()

def saludo(arg1):
   direccion = r"/Applications/XAMPP/xamppfiles/htdocs/php-login-simple-master"
   direccion=direccion+r"/" + arg1
   print("Entre5")
   print(direccion)
   app(direccion,arg1)
   
   




     
#direccion=r"C:\\xampp\htdocs\\php-login-simple-master\\img\\image-000001.dcm"
#filename = 'image-000001'
#app(direccion, filename)



