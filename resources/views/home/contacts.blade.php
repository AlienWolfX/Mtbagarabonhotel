<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Contact Us</h6>
            <h1 class="mb-5">Message <span class="text-primary text-uppercase">Mt.Bagarabon</span></h1>
        </div>

<div class="form-container">

    <form id="request" action="{{url('contacts')}}" method="Post">

        @csrf
        <div class="form-group">
            <input type="text" placeholder="Name"  name="name" required>
        </div>
        <div class="form-group">
            <input type="email" placeholder="Email" name="email" required>
        </div>
        <div class="form-group">
            <input type="number" placeholder="Phone Number"  name="phone" required> 
        </div>
        <div class="form-group">
            <textarea placeholder="Message" name="message" required></textarea>
        </div>
        <button type="submit">Send Message</button>
        
    </form>
</div>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    }

    .wrapper {
        min-height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f5f5f5;
        padding: 20px;
    }

    .form-container {
        width: 100%;
        max-width: 500px;
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        margin: 0 auto; /* Ensures horizontal centering */
    }

    .form-group {
        margin-bottom: 20px;
    }

    input, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #e0e0e0;
        border-radius: 5px;
        font-size: 16px;
        outline: none;
        transition: border-color 0.3s ease;
    }

    input:focus, textarea:focus {
        border-color: #007bff;
    }

    textarea {
        min-height: 120px;
        resize: vertical;
    }

    input::placeholder, textarea::placeholder {
        color: #999;
    }

    button {
        width: 100%;
        padding: 12px;
        background: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    button:hover {
        background: #0056b3;
    }

    /* If you want to use the form within another container */
    .form-container.as-component {
        margin: 40px auto;
    }
</style>