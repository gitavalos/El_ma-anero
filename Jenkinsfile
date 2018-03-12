pipeline {
    agent any 
    stages {
        stage('Build') { 
            steps {
                oomposer install;
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