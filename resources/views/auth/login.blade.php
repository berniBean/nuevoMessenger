@extends('layouts.app')

@section('content')
<b-container>

    <b-row align-h="center">
        
        <b-col cols="8">


            <b-card 
                title="inicio de sesión">
                <b-alert show>Ingrese sus datos por favor</b-alert>


                    <b-form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                <!--Form-group correo electronico-->
                      <b-form-group
                                    label="Correo electrónico:"
                                    label-for="email"
                                    description="No compartimos tu e-mail :D.">
                        <b-form-input id="email"
                                      type="email"
                                      name="email"
                                      value="{{ old('email') }}" required autofocus
                                      placeholder="Ingresa aquí tu correo. ejemplo@correo.com">
                        </b-form-input>
                      </b-form-group>

                 <!--Form-group contraseña-->
                      <b-form-group
                                    label="Contraseña:"
                                    label-for="password">
                        <b-form-input id="password"
                                      type="password"
                                      name="password"
                                      value="{{ old('password') }}" required>
                        </b-form-input>
                      </b-form-group>

                      <!--Form-group recordar sesión-->
                        <b-form-group>
                        <b-form-checkbox name="remember"  
                        {{ old('remember') ? 'checked="true"' : '' }}>
                            Recordar Sesión
                        </b-form-checkbox>
                        </b-form-group>

                            <b-button type="submit" variant="primary">
                                Ingresar
                            </b-button>


                            <b-button href="{{ route('password.request') }}" variant="link">
                                ¿Olvidaste tu contraseña?
                            </b-button>


                    </b-form>


        </b-card>


                </div>
            </div>
        </b-col>
    </b-row>
</b-container>
@endsection
