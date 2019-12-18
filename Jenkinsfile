pipeline {
    agent any 

    stages {
        stage('Build') {
            parallel{
                stage('Front End Build: Angular') { 
                	agent {
                		docker {
                			image 'liumiaocn/angular:7.3.8'
                		}
                	}
                    steps { 
                        sh 'echo Front End Build stage ...' 
                        sh 'ng --version'
                    }
                }
                stage('Back End Build: Maven') { 
                	agent {
                		docker {
                			image 'liumiaocn/maven:3.6.1'
                		}
                	}
                    steps { 
                        sh 'echo Back End Build stage ...' 
                        sh 'mvn --version'
                    }
                }
            }
        }
        stage('Test'){
            steps {
                sh 'echo Test stage ...' 
            }
        }
        stage('Deploy') {
            steps {
                sh 'echo Deploy stage ...' 
            }
        }
    }
  }
