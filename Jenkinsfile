pipeline {
    agent any

    stages {

        stage('Git Checkout') {
            steps {
                git 'https://github.com/kusalapulla/wordpress.git'
            }
        }

        stage('Docker Build') {
            steps {
                sh 'docker build -t wordpress-app .'
            }
        }

        stage('Docker Images') {
            steps {
                sh 'docker images'
            }
        }
    }
}