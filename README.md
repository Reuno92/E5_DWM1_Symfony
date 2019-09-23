# DEVOIR SYMFONY
for [Antoine Lucsko](mailto:Antoine.Lucsko@estiam.com)
by [Renaud Renaud](mailto:renaud.racinet@estiam.com)

## Start the project

Configure your `.env` file and ignore in your git !

### Create database
```
php bin/console doctrine:database:create
```

### Launch the server

By default the server's port has configured on 8000, 
the following instructions was based on this port.

If you want use another port, please udpate scripts' exec.

#### Manually method
Type this command bellow in your terminal, window command 
or command prompt when you are in project's folder.

```
php bin/console server:run
```

You must use [this link](http://localhost:8000) or [that link](http://127.0.0.1:8000)

#### By a script command
(Hello bootcamp ESTIAM October 2017 )

On **Windows**
Type `exec.bat` in your window command or command prompt.

On **MacOSX** and **Linux**
type `sh exec.sh` in your terminal.

```                                                                                                                                         
  _    _                           _                _    _             
 | |  | |                         | |              | |  (_)            
 | |__| | __ _ _ __  _ __  _   _  | |__   __ _  ___| | ___ _ __   __ _ 
 |  __  |/ _` | '_ \| '_ \| | | | | '_ \ / _` |/ __| |/ / | '_ \ / _` |
 | |  | | (_| | |_) | |_) | |_| | | | | | (_| | (__|   <| | | | | (_| |
 |_|  |_|\__,_| .__/| .__/ \__, | |_| |_|\__,_|\___|_|\_\_|_| |_|\__, |
              | |   | |     __/ |                                 __/ |
              |_|   |_|    |___/                                 |___/                                                  `--`                                                                           `--`-'   
```