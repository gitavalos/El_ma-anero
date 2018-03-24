pipeline {
	agent any
    stages {
        stage('Build') {
            steps {
                def output = sh returnStdout: true, script: 'php -v'
            }
        }
    }
}
