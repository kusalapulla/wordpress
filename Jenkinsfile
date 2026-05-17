pipeline {
    agent any

    tools {
        sonarRunner 'sonar-scanner'
    }

    stages {

        stage('Git Checkout') {
            steps {
                git 'https://github.com/kusalapulla/wordpress.git'
            }
        }

        stage('SonarQube Analysis') {
            steps {
                withSonarQubeEnv('sonarqube') {
                    sh '''
                    ${scannerHome}/bin/sonar-scanner \
                    -Dsonar.projectKey=wordpress \
                    -Dsonar.sources=. \
                    -Dsonar.host.url=http://54.227.45.148:9000
                    '''
                }
            }
        }

        stage('Docker Build') {
            steps {
                sh 'docker build -t wordpress-app .'
            }
        }
    }
}