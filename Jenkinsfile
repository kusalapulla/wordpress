pipeline {
    agent any

    stages {

        stage('Git Checkout') {
            steps {
                git branch: 'main',
                url: 'https://github.com/kusalapulla/wordpress.git'
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