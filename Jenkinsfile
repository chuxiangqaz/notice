pipeline {
    agent {
        docker {
                lable 'docker'
            image 'composer'
        }
    }
    stages {
        stage('Build') { 
            steps {
                sh 'composer install --no-dev' 
                echo 'composer success'
            }
        }
    }
}
