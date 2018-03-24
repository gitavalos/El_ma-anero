pipeline {
	agent any
    stages {
        stage('Build') {
            steps {
                sh 'composer install'
				sh php -v
				sh 'php artisan serve'
            }
        }
    }
}
