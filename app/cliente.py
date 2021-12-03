# -*- coding: utf-8 -*-
"""
Created on Wed Jun 16 16:10:32 2021

@author: SAMSUNG
"""
import zipfile
import os
import wget
from comprimidor2 import extraccion
import sys

def descarga(docname):
    url = "http://25.1.211.136:8020/" + docname +'.zip'
    wget.download(url,os.getcwd())
    print("Entre2")

def descompresion(docname):
    documento_zip = zipfile.ZipFile(docname + '.zip')
    documento_zip.extract(docname) 
    documento_zip.close()
    print("Entre3")
    
def app(docname):
    descarga(docname)
    descompresion(docname)
    extraccion(docname , docname +'.jpeg')
    print("Entre4")
    
def saludo_(arg):
    print("Entre1")
    app(arg)
    
   
    
    
    
#docname = 'image-000001'
#app(docname)

#def saludo(arg):

    #app(arg[1])
    
    #return 
#saludo(sys.argv)