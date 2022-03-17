# Employees App

## Tech information
- Laravel 9.1
- PHP 8.1
- [DB Scheme](https://drawsql.app/orlovkn/diagrams/employees-app)

### Steps for local docker:
1. **Clone repository**:  
   ```git clone https://github.com/orlovkn/employees-app.git```
2. **Copy ENV files**:
    - macOS/Linux:  
      `cp .env.example .env`
    - Windows (in **PowerShell**):  
      `cp .\.env.example .\.env`
3. **Build and run** services:  
   ```docker-compose up --build``` or  
   ```docker-compose up --build -d```
4. **Exec bash in livechat_app container:** `docker exec -it readinglist_app /bin/sh`
    * **Generate JWT_SECRET**  
      ```php artisan jwt:secret```
    * **Run migrations**  
      ```php artisan migrate``` or
      ```php artisan migrate:fresh --seed```
### Open app in your browser
```http://127.0.0.1:8062/```

