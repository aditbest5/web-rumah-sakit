pipeline {
    agent any
    triggers {
        githubPush()
    }

    stages {
        stage('Build') {
            steps {
                script {
                    // Membangun image Docker
                    sh 'docker build -t aditbest5/rumah-sakit .'
                }
            }
        }

        stage('Deliver') {
            steps {
                script {
                    // Menghentikan dan menghapus container yang berjalan, jika ada
                    sh 'docker container stop rumah-sakit-container || true'
                    sh 'docker container rm rumah-sakit-container || true'

                    // Menjalankan container baru dalam mode detached (-d)
                    sh 'docker run -d --name rumah-sakit-container -p 8000:8000 aditbest5/rumah-sakit &'
                }
            }
        }
    }

    post {
        always {
            script {
                // Membersihkan image yang tidak digunakan
                sh 'docker image prune -f || true'
            }
        }
    }
}
