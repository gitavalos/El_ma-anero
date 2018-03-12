pipeline {
    agent any 
    stages {
        stage('Build') { 
            steps {
                composer install;
            }
        }
        stage('Test') { 
            steps {
                echo 'test!';
            }
        }
        stage('Deploy') { 
            steps {
                echo 'deploy'
            }
        }
    }
}