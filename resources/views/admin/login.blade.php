<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <link rel="icon" type="image/png" href="uploads/favicon.png">
    <title>Admin Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
    @include('admin.layout.styles')
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Düzce Üniversitesi - Admin Panel Giriş</h4>
                            </div>
                            <div class="card-body">
                                @if(session()->get('success'))
                                    <div class="text-success">{{ session()->get('success') }}</div>
                                @endif
                                <form method="POST" action="{{ route('admin_login_submit') }}" >
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autofocus>
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        @if(session()->get('error'))
                                            <div class="text-danger">{{ session()->get('error') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="control-label">Şifre</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                                        @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Giriş Yap
                                        </button>
                                    </div>
                                </form>
                                <div class="text-center mt-4 mb-3">
                                    <div class="text-muted">
                                        <a href="{{ route('admin_forget_password') }}" style="text-decoration: none;">
                                            Şifreni mi unuttun?
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('admin.layout.scripts_footer')
</body>
</html>
