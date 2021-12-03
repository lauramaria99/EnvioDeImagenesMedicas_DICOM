import servidor
from flask import Flask, render_template, request, session, flash, redirect, url_for
from flask_mysqldb import MySQL
#from cliente import saludo_
from servidor import saludo
#from prueba import suma
import bcrypt

app=Flask(__name__)

#Establacer la clave secreta
app.secret_key = "appLogin"

# semilla para encriptamiento
seed = bcrypt.gensalt()

app.config['MYSQL_HOST'] = 'localhost'
app.config['MYSQL_USER'] = 'root'
app.config['MYSQL_PASSWORD'] = ''
app.config['MYSQL_DB'] = 'dicom'

mysql = MySQL(app)

@app.route('/')
def index():
    data={
        'titulo':'Pagina nueva',
        'bienvenida':'Saludos' 
    }
    return render_template('login.php',data=data)

@app.route('/inicio')
def inicio():
    return render_template('inicio.php')

@app.route('/boton')
def boton():
    if 'nombre' in session:
        return render_template('estado.php')
    else:
        return render_template('login.php')
        #return render_template('boton.php')

@app.route('/diagnostico', methods=['POST','GET'])
def diagnostico():
    if 'nombre' in session:
        return render_template('diagnostico.php')
    else:
        return render_template('login.php')

@app.route('/envio')
def envio():
    if 'nombre' in session:
        return render_template('envio.php')
    else:
        return render_template('login.php')
    

@app.route('/servidor_', methods=['POST'])
def servi():
    #if request.method=='POST':
    nombreimg=request.form['name']
    print(nombreimg)
    saludo(nombreimg)
        #saludo(nombreimg)
    #render_template('estado.php')
    return redirect(url_for('estado'))


@app.route('/cliente_', methods=['POST'])
def clien():
    nombreimg1=request.form['image']
    saludo_(nombreimg1)
    return render_template('diagnostico.php')

@app.route('/estado')
def estado():
    if 'nombre' in session:
        return render_template('estado.php')
    else:
        return render_template('login.php')

@app.route('/index')
def index12():
    if 'nombre' in session:
        return render_template('index.php')
    else:
        return render_template('login.php')

@app.route('/login', methods=['GET' , 'POST'])
def login():
    correo = request.form['email']
    passwd = request.form['password']
    passwd_encode = passwd.encode('utf8')
    cur = mysql.connection.cursor()
    sQuery = "SELECT * FROM users WHERE email LIKE %s"
    cur.execute(sQuery,[correo])
    usuario = cur.fetchone()
    cur.close()
    if usuario != None:
        passwd_encrypted_encode = usuario[2].encode()
        print('Password_encode: ',passwd_encode)
        print('Password_encrypted: ', passwd_encrypted_encode)
        #verifica el password
        if bcrypt.checkpw(passwd_encode,passwd_encrypted_encode):
            #registra la sesión
            session['nombre'] = usuario[3]
            session['email'] = correo
            #Redirecciona a index
            return render_template('index.php')
        else:
            #Mensaje de flash
            flash("El password no es correcto" , "alert-warning")
            #redirecciona a ingresar.html
            return render_template('login.php')
    else:
        return redirect(url_for('login'))
        #return render_template('login.php')

@app.route('/logout')
def logout():
    #cerrar sesión
    session.clear()
    #redirecciona a ingresar.html
    return redirect(url_for('index'))

@app.route('/signup')
def signup():
    return render_template('signup.php')

@app.route('/register', methods=['POST' , 'GET'])
def register():
    """ if request.method=='GET':
        if 'nombre' in session:
            return render_template('envio.php')
        else:
            return render_template('login.php')
    else: """
    identity = request.form['identity']
    name = request.form['name']
    position = request.form['position']
    email = request.form['email']
    passwd = request.form['password']
    confirm_password =  request.form['confirm_password']
    passwd_encode = passwd.encode('utf8')
    passwd_encrypted = bcrypt.hashpw(passwd_encode , seed)
    """ print('Insertando...')
    print('Password_encode: ',passwd_encode)
    print('Password_encrypted: ', passwd_encrypted)
 """    
    #Se crear el cursor para la ejecución
    cur = mysql.connection.cursor()
    
    #Consulta el número de usuario actualmente para asignar el id
    # al proximo que va a crear
    sql = "SELECT * FROM users"
    cur.execute(sql)
    usuarios_ = cur.fetchall()
    id_ = len(usuarios_)+1


    #prepara el query para insertar en la BD
    sQuery = "INSERT INTO users (id,email,name,password,identity,position) VALUES (%s,%s, %s, %s, %s, %s)"

    #Ejecuta sentencia
    cur.execute(sQuery,(id_,email, name, passwd_encrypted, identity,position))

    #Ejecuta el Commit
    mysql.connection.commit()

    #Registra la sesión
    session['nombre'] = name
    session['email'] = email

    #Redirecciona al index
    return redirect(url_for('index'))
    #return render_template('signup.php')

@app.route('/usuario.php')
def usuario():
    return render_template('usuario.php')

@app.route('/SERVIDOR_.py')
def servidor():
    return render_template('SERVIDOR_.py')

@app.route('/cliente.py')
def cliente():
    return render_template('cliente.py')

@app.route('/comprimidor2.py')
def comprimidor():
    return render_template('comprimidor.py')

if __name__ == '__main__':
    app.run(debug=True, port=5000)