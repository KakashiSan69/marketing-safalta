<?php
/**
 * Template Name: Thank You Page
 */
get_header();
?>

<!-- Ambient background glow elements -->
<div class="ambient-glow ambient-glow-1" aria-hidden="true"></div>
<div class="ambient-glow ambient-glow-2" aria-hidden="true"></div>

<style>
  :root {
    --bg: #090510;
    --surface: #140d22;
    --surface-border: rgba(168, 122, 255, 0.28);
    --violet: #8b5cf6;
    --violet-light: #a78bfa;
    --green: #22c55e;
    --text: #f5f3ff;
    --text-muted: #a79fc0;
  }
  .ambient-glow {
    position: fixed;
    border-radius: 50%;
    filter: blur(80px);
    pointer-events: none;
    z-index: 0;
    opacity: 0.55;
  }
  .ambient-glow-1 {
    top: 15%;
    left: 50%;
    transform: translateX(-50%);
    width: clamp(280px, 45vw, 600px);
    height: clamp(280px, 45vw, 600px);
    background: radial-gradient(circle, rgba(139, 92, 246, 0.28) 0%, rgba(93, 39, 180, 0.08) 60%, transparent 80%);
  }
  .ambient-glow-2 {
    bottom: 5%;
    right: 10%;
    width: clamp(220px, 30vw, 420px);
    height: clamp(220px, 30vw, 420px);
    background: radial-gradient(circle, rgba(34, 197, 94, 0.12) 0%, transparent 70%);
  }
  .page-main-thankyou {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 120px 16px 80px;
    position: relative;
    z-index: 1;
    width: 100%;
    box-sizing: border-box;
  }
  .confirmation-card {
    width: 100%;
    max-width: 620px;
    background: linear-gradient(155deg, rgba(22, 15, 36, 0.94) 0%, rgba(13, 8, 22, 0.98) 100%);
    border: 1px solid var(--surface-border);
    border-radius: 24px;
    box-shadow: 0 25px 65px rgba(0, 0, 0, 0.75), 0 0 45px rgba(139, 92, 246, 0.16);
    padding: clamp(28px, 6vw, 52px) clamp(20px, 5vw, 44px);
    text-align: center;
    position: relative;
    box-sizing: border-box;
  }
  .success-icon-wrapper {
    position: relative;
    width: 86px;
    height: 86px;
    margin: 0 auto 24px auto;
    display: grid;
    place-items: center;
  }
  .success-badge {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    box-shadow: 0 10px 30px rgba(16, 185, 129, 0.45);
    display: grid;
    place-items: center;
  }
  .checkmark-svg {
    width: 48%;
    height: 48%;
    stroke: #ffffff;
    stroke-width: 4;
    stroke-linecap: round;
    stroke-linejoin: round;
    fill: none;
  }
  .thankyou-title {
    font-size: clamp(1.4rem, 4.3vw, 2.3rem);
    font-weight: 700;
    color: #ffffff;
    line-height: 1.25;
    margin: 0 0 16px;
    text-align: center;
  }
  .confirmation-desc {
    font-size: 1rem;
    line-height: 1.6;
    color: var(--text-muted);
    max-width: 500px;
    margin: 0 auto 28px;
  }
  .confirmation-desc strong {
    color: #ffffff;
  }
  .details-box {
    background: rgba(14, 9, 24, 0.85);
    border: 1px solid rgba(168, 122, 255, 0.2);
    border-radius: 14px;
    padding: 18px;
    margin: 0 auto 30px;
    display: grid;
    gap: 12px;
    text-align: left;
  }
  .detail-item {
    display: flex;
    align-items: center;
    gap: 12px;
    color: #ded8e8;
    font-size: 0.92rem;
  }
  .detail-icon {
    width: 32px;
    height: 32px;
    flex-shrink: 0;
    border-radius: 8px;
    background: rgba(139, 92, 246, 0.15);
    border: 1px solid rgba(139, 92, 246, 0.3);
    display: grid;
    place-items: center;
    color: var(--violet-light);
  }
  .btn-primary {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 9px;
    padding: 14px 28px;
    font-size: 15px;
    font-weight: 700;
    color: #ffffff !important;
    text-decoration: none;
    border-radius: 10px;
    background: linear-gradient(135deg, #8b5cf6 0%, #6d28d9 100%);
    box-shadow: 0 8px 24px rgba(109, 40, 217, 0.45);
    transition: all 0.25s ease;
  }
  .btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 14px 32px rgba(139, 92, 246, 0.6);
  }
</style>

<!-- Main Section -->
<main class="page-main-thankyou">
  <article class="confirmation-card">
    <div class="success-icon-wrapper">
      <div class="success-badge">
        <svg class="checkmark-svg" viewBox="0 0 24 24">
          <path d="M5 13l4 4L19 7" />
        </svg>
      </div>
    </div>

    <h1 class="thankyou-title">Thank you. your meeting is confirmed</h1>
    <p class="confirmation-desc">
      We have reserved your slot. The <strong>Google Meet invite &amp; call link</strong> have been dispatched to your email address.
    </p>

    <div class="details-box">
      <div class="detail-item">
        <div class="detail-icon">
          <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
            <polyline points="22 4 12 14.01 9 11.01"></polyline>
          </svg>
        </div>
        <div>
          <b style="color: #fff; display: block;">Status: Slot Locked &amp; Confirmed</b>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Your 1-on-1 strategy session is confirmed.</span>
        </div>
      </div>

      <div class="detail-item">
        <div class="detail-icon">
          <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
            <polyline points="22,6 12,13 2,6"></polyline>
          </svg>
        </div>
        <div>
          <b style="color: #fff; display: block;">Calendar Invitation Sent</b>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Please check your inbox (and spam folder if not found).</span>
        </div>
      </div>

      <div class="detail-item">
        <div class="detail-icon">
          <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
          </svg>
        </div>
        <div>
          <b style="color: #fff; display: block;">1-on-1 Session with Growth Specialist</b>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Customized high-ROI ad roadmap tailored for your business.</span>
        </div>
      </div>
    </div>

    <div>
      <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary">
        <span>Return to Homepage</span>
      </a>
    </div>
  </article>
</main>

<?php get_footer(); ?>
